<?php

namespace App\Policies;

use App\Models\ContentBlog;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ContentBlogPolicy
{
    use HandlesAuthorization;
    public function before(User $user, $abilities)
    {
        if ($user->type == 'super-admin') {

            return true;
        }
    }

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        return $user->hasAbility('blog.view');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ContentBlog  $contentBlog
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, ContentBlog $contentBlog)
    {
        return $user->hasAbility('blog.view');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->hasAbility('blog.create');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ContentBlog  $contentBlog
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, ContentBlog $contentBlog)
    {
        return $user->hasAbility('blog.edit');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ContentBlog  $contentBlog
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user)
    {
        return $user->hasAbility('blog.delete');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ContentBlog  $contentBlog
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, ContentBlog $contentBlog)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ContentBlog  $contentBlog
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, ContentBlog $contentBlog)
    {
        //
    }
}
