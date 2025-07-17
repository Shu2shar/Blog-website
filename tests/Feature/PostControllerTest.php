<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;
use Tests\Traits\AuthenticateUser;

class PostControllerTest extends TestCase
{
    // use RefreshDatabase;
    use AuthenticateUser;

    #[Test]
    public function authenticated_user_can_create_a_post()
    {
        $user = $this->actingAsUser(); // Auth user

        Storage::fake('public');

        $category = Category::factory()->create();
        $tag1 = Tag::factory()->create();
        $tag2 = Tag::factory()->create();

        $response = $this->post(route('posts.store'), [
            'title' => 'My Test Post',
            'body' => 'This is a test post.',
            'category_id' => $category->id,
            'tags' => [$tag1->id, $tag2->id],
            'image' => UploadedFile::fake()->image('post.jpg'),
        ]);

        $response->assertRedirect(route('posts.index'));
        $this->assertDatabaseHas('posts', [
            'title' => 'My Test Post',
            'user_id' => $user->id,
        ]);
    }

    #[Test]
    public function guest_cannot_create_post()
    {
        $category = Category::factory()->create();

        $response = $this->post(route('posts.store'), [
            'title' => 'Guest Post',
            'body' => 'Guest body',
            'category_id' => $category->id,
        ]);

        $response->assertRedirect(route('login'));
    }

    #[Test]
    public function authenticated_user_can_update_own_post()
    {
        $user = $this->actingAsUser();

        $category = Category::factory()->create();
        $post = Post::factory()->create([
            'user_id' => $user->id,
            'category_id' => $category->id,
        ]);

        $response = $this->put(route('posts.update', $post), [
            'title' => 'Updated Title',
            'body' => 'Updated Body',
            'category_id' => $category->id,
            'tags' => [],
        ]);

        $response->assertRedirect(route('posts.index'));
        $this->assertDatabaseHas('posts', ['title' => 'Updated Title']);
    }

    #[Test]
    public function authenticated_user_cannot_edit_others_post()
    {
        $user = $this->actingAsUser();
        $otherUser = User::factory()->create();

        $category = Category::factory()->create(); // ✅ Fix added

        $post = Post::factory()->create([
            'user_id' => $otherUser->id,
            'category_id' => $category->id,
        ]);

        $response = $this->get(route('posts.edit', $post));
        $response->assertForbidden();
    }
}
