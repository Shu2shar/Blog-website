# Laravel 12 Blog Project

**Project :** ✅ Day 6 Completed

---

## ✅ Day 1: Authentication, Middleware, Roles, Lifecycle

### 🔐 Laravel Breeze Setup

Laravel Breeze provides a minimal, simple authentication scaffolding using Blade and Tailwind CSS.

#### Installation:

```bash
composer require laravel/breeze --dev
php artisan breeze:install
npm install && npm run dev
php artisan migrate
```

#### Features Added:

* Login / Register UI
* Email verification
* Password reset
* Auth middleware

---

### 🛡️ Spatie Roles & Permissions

Handled role-based access using Spatie Laravel Permission.

#### Installation:

```bash
composer require spatie/laravel-permission
php artisan vendor:publish --tag="permission-config"
php artisan vendor:publish --tag="permission-migrations"
php artisan migrate
```

#### Setup:

```php
use Spatie\Permission\Traits\HasRoles;
class User extends Authenticatable {
    use HasRoles;
}
```

#### Example Usage:

```php
Role::create(['name' => 'admin']);
$user->assignRole('admin');
```

---

### 👮 Middleware Role Protection

```php
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'admin']);
});
```

---

## 🔄 Laravel Request & Response Life Cycle

### Step-by-Step:

1. **User Request** → Browser sends HTTP request
2. **Entry Point** → `public/index.php`
3. **HTTP Kernel** loads middlewares
4. **Service Providers** bootstrap Laravel
5. **Middleware Execution** → Auth, CSRF, etc.
6. **Route Matching**
7. **Controller Execution**
8. **View Rendering**
9. **Response Creation**
10. **Terminate Middleware**
11. **Response to Browser**

### Diagram:

```
Client Request → index.php → Kernel → Providers → Middleware → Route → Controller → Response → Browser
```

---

## ✅ Day 2: Eloquent, Relationships, Factories, Seeders

### 📦 Models & Relationships:

* **User** → hasMany(Post)
* **Post** → belongsTo(User, Category), belongsToMany(Tag)
* **Category** → hasMany(Post)
* **Tag** → belongsToMany(Post)

### 🏭 Factories:

* UserFactory, CategoryFactory, TagFactory, PostFactory

### 🌱 Seeders:

```php
Post::factory(20)->create()->each(function ($post) {
    $post->tags()->attach(Tag::inRandomOrder()->take(rand(1, 3))->pluck('id'));
});
```

Run using:

```bash
php artisan migrate:fresh --seed
```

### 🔤 Accessors Example:

```php
public function getFormattedTitleAttribute() {
    return strtoupper($this->title);
}
```

### ✅ File Uploads:

* Stored in `storage/app/public/posts`
* Cleaned filenames using `Str::slug`
* Old images deleted on update

---

## ✅ Day 3: Jobs, Queues, Events & Notifications

### 🛠️ 1. Scaffolding Commands (run *before* coding)

```bash
# Events
php artisan make:event UserRegistered
php artisan make:event PostCreated

# Listeners (queued by default with --queued flag)
php artisan make:listener SendWelcomeEmailListener --event=UserRegistered --queued
php artisan make:listener SendPostPublishedNotification --event=PostCreated --queued

# Notification & Mail
php artisan make:notification PostPublishedNotification
php artisan make:mail WelcomeMail --markdown=emails.welcome
```

---

### 🗺️ 2. High‑Level Flow

1. **User registers** → `UserRegistered` event fires → `SendWelcomeEmailListener` queues a `WelcomeMail`.
2. **User creates a post** → `PostCreated` event fires → `SendPostPublishedNotification` listener queues a notification to all users (mail + database).

All listeners implement `ShouldQueue`, so emails/notifications are processed asynchronously by your queue worker (`php artisan queue:work`).

---

### 🧩 3. Event–Listener Wiring

Edit **`app/Providers/EventServiceProvider.php`**:

```php
protected $listen = [
    \App\Events\UserRegistered::class => [
        \App\Listeners\SendWelcomeEmailListener::class,
    ],
    \App\Events\PostCreated::class => [
        \App\Listeners\SendPostPublishedNotification::class,
    ],
];
```

Laravel now automatically discovers and dispatches the correct listener when each event is fired.

---

### ✉️ 4. `UserRegistered` Event & Listener

```php
// app/Events/UserRegistered.php
class UserRegistered {
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $user;
    public function __construct(User $user) { $this->user = $user; }
}
```

```php
// app/Listeners/SendWelcomeEmailListener.php
class SendWelcomeEmailListener implements ShouldQueue {
    public function handle(UserRegistered $event) {
        Mail::to($event->user->email)->queue(new WelcomeMail($event->user));
    }
}
```

**Trigger** (after creating the user and logging them in):

```php
event(new UserRegistered($user));
```

---

### 📝 5. `PostCreated` Event & Listener

```php
// app/Events/PostCreated.php
class PostCreated {
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $post;
    public function __construct(Post $post) { $this->post = $post; }
}
```

```php
// app/Listeners/SendPostPublishedNotification.php
class SendPostPublishedNotification implements ShouldQueue {
    public function handle(PostCreated $event) {
        $users = User::all(); // Filter roles if needed
        Notification::send($users, new PostPublishedNotification($event->post));
    }
}
```

**Trigger** in `PostController@store` *after* saving and tagging:

```php
event(new PostCreated($post));
```

---

### 🔔 6. `PostPublishedNotification`

```php
class PostPublishedNotification extends Notification implements ShouldQueue {
    public function via($notifiable) { return ['mail', 'database']; }
    public function toMail($notifiable) {
        return (new MailMessage)
            ->subject('A new post was published!')
            ->greeting('Hello!')
            ->line("Post: {$this->post->title}")
            ->action('View Post', route('posts.show', $this->post->slug))
            ->line('Thanks for reading!');
    }
    public function toDatabase($notifiable) {
        return [ 'post_id' => $this->post->id, 'title' => $this->post->title ];
    }
}
```

The notification is stored in the `notifications` table and emailed—both handled in the queue.

---

### 📧 7. `WelcomeMail`

```php
class WelcomeMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    /**
     * Create a new message instance.
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Welcome to Our Platform',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.welcome',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
```

Create **`resources/views/emails/welcome.blade.php`** with a friendly Markdown template.

---

### 🧪 8. Tips for Testing

* Dispatch events using `event(new UserRegistered($user))` inside a test and assert that jobs were pushed:

```php
event(new UserRegistered($user));
```


---

### 📊 9. Queue Worker & Horizon

Run a worker locally:

```bash
php artisan queue:work
```

For production visibility, consider adding **Laravel Horizon** for dashboard‑level monitoring of queued jobs.

---

### ✅ 10. Day‑3 Checklist

| Task                                  | Status |
| ------------------------------------- | ------ |
| Events & Listeners scaffolded         | ✅      |
| Listeners queued (`ShouldQueue`)      | ✅      |
| Welcome email on user registration    | ✅      |
| Post‑published notification (mail+DB) | ✅      |
| Tested with Bus / Notification fakes  | ✅      |

Your application now embraces **event‑driven architecture**, improves performance with **queues**, and enhances UX with **real‑time notifications**.

---

---

## ✅ Day 4: Policies, Gates, Services, Providers

### 🔐 Policy: PostPolicy

```bash
php artisan make:policy PostPolicy --model=Post
```

```php
public function update(User $user, Post $post) {
    return $user->id === $post->user_id;
}
```

### 🚧 Gate:

```php
 Gate::define('view-premium', function (User $user) {
            return $user->points > 100;
        });
```

### 🧰 Service Class:

```php
class StatsService
{
    public function getMonthlyStats(): array
    {
        return [
            'new_users' => User::whereMonth('created_at', now()->month)->count(),
            'posts_created' => Post::whereMonth('created_at', now()->month)->count(),
        ];
    }
}
```

### 🧩 Register Provider:

```bash
php artisan make:provider StatsServiceProvider
```

```php
public function register(): void
    {
        $this->app->singleton(StatsService::class, function ($app) {
            return new StatsService();
        });
    }
```

---

## ✅ Day 5: API, Resources, Validation, Sanctum

### 🔐 Sanctum Setup:

```bash
composer require laravel/sanctum
php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"
php artisan migrate
```

### AuthController:

Handles `register` and `login` with token creation.

### 🧾 Form Request Validation:

```php
public function rules() {
    return ['title' => 'required|string|max:255'];
}
```

### API Routes:

```php
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/profile', function (Request $request) {
        return $request->user();
    });

    Route::apiResource('posts', PostController::class);
});
```

### API Resource (PostResource):

```php
return [
        'id' => $this->id,
        'title' => $this->title,
        'body' => $this->body,
        'author' => $this->user?->name, // null-safe: if user exists
        'category' => $this->category?->name, // optional
        'created_at' => $this->created_at->diffForHumans(),
];
```

---

## ✅ Day 6: Testing, Artisan Commands, File Uploads, Scout

### 🧪 Testing:

* Created reusable trait for `actingAsUser`
* Tests: create, update, access control

# Step 1: Set Up a Test Environment

```php
DB_DATABASE=check_database

```

# Step 2: Create the Feature Test

```php
php artisan make:test PostControllerTest

# path 
tests/Feature/PostControllerTest.php

```

# test artisan command

```php
php artisan test --filter=PostControllerTest

or

./vendor/bin/phpunit --filter=PostControllerTest

```

### 🛠 Artisan Command:

```php
php artisan make:command CleanupOldSoftDeletedPosts
```

Deletes posts older than 30 days:

```php
Post::onlyTrashed()->where('deleted_at', '<', now()->subDays(30))->forceDelete();
```

### 📁 File Uploads:

* Safe validation and storage
* Deletes old image on update
* Deletes image with data using destroy

# step 1
```php
php artisan make:migration add_image_to_posts_table --table=posts

Schema::table('posts', function (Blueprint $table) {
    $table->string('image')->nullable(); // stores image filename/path
});

php artisan migrate

# in model
protected $fillable = ['title', 'content', 'image']; // include image


# In form
enctype="multipart/form-data"

# Create storage link
php artisan storage:link


#accesss in blade 
@if ($post->image)
    <img src="{{ asset('storage/' . $post->image) }}" width="300" alt="Post Image">
@endif
```


### 🔍 Scout Full-Text Search:

```php
#Install Scout
composer require laravel/scout

php artisan vendor:publish --provider="Laravel\Scout\ScoutServiceProvider"


```

Model uses:

```php
use Laravel\Scout\Searchable;

class Post extends Model
{
    use Searchable;
    
    // Optional: define which fields are searchable
    public function toSearchableArray()
    {
        return [
            'title' => $this->title,
            'content' => $this->content,
        ];
    }
}

```

## Import Data into Search Engine
```php
php artisan scout:import "App\Models\Post"
```
---


## Perform a Search

```php
Post::search($query)->paginate(10);
```

### 📌 Soft delete step by step

* In model add
```php
    use Illuminate\Database\Eloquent\SoftDeletes;

    use SoftDeletes;   

    #create column

    php artisan make:migration add_deleted_at_to_posts_table --table=posts

    $table->softDeletes(); // adds deleted_at column

    php artisan migrate
```

* Retrieve All Records
```
$posts = Post::withTrashed()->get();

# only Deleted Records

$posts = Post::onlyTrashed()->get();
```

* Restore Soft Deleted Record
```
Post::withTrashed()->find(1)->restore();

```
* Permanently delete 
```
Post::withTrashed()->find(1)->forceDelete();

```