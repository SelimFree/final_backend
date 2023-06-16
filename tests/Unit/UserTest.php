<?php

namespace Tests\Unit;

use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /**
     * Test getting a list of users.
     *
     * @return void
     */
    public function testIndex()
    {
        // Create some sample users in the database
        User::factory()->count(5)->create();

        // Send a GET request to the index() method of UserController
        $response = $this->get('/api/users');

        // Assert that the response has a successful status code
        $response->assertStatus(200);

        // Assert that the response contains the correct number of users
        $response->assertJsonCount(5);
    }

    /**
     * Test getting a specific user by ID.
     *
     * @return void
     */
    public function testShow()
    {
        // Create a sample user in the database
        $user = User::factory()->create();

        // Send a GET request to the show() method of UserController with the user ID
        $response = $this->get('/api/users/' . $user->id);

        // Assert that the response has a successful status code
        $response->assertStatus(200);

        // Assert that the response contains the correct user data
        $response->assertJson([
            'name' => $user->name,
            'email' => $user->email,
        ]);
    }

    /**
     * Test creating a new user.
     *
     * @return void
     */
    public function testStore()
    {
        // Create a sample user payload
        $userData = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'hash' => 'password',
        ];

        // Send a POST request to the store() method of UserController with the user payload
        $response = $this->post('/api/users', $userData);

        // Assert that the response has a created status code
        $response->assertStatus(201);

        // Assert that the response contains the correct user data
        $response->assertJson($userData);

        // Assert that the user is actually created in the database
        $this->assertDatabaseHas('users', $userData);
    }

    /**
     * Test deleting a user by ID.
     *
     * @return void
     */
    public function testDestroy()
    {
        // Create a sample user in the database
        $user = User::factory()->create();

        // Send a DELETE request to the destroy() method of UserController with the user ID
        $response = $this->delete('/api/users/' . $user->id);

        // Assert that the response has a successful status code
        $response->assertStatus(200);

        // Assert that the user is actually deleted from the database
        $this->assertDatabaseMissing('users', ['id' => $user->id]);
    }
}
