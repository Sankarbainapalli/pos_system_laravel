<?php

namespace Illuminate\Notifications;

trait HasDatabaseNotifications
{
    /**
     * Get the entity's notifications.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function notifications()
    {
        return $this->morphMany(DatabaseNotification::class, 'notifiable')->orderBy('created_at', 'desc');
    }

    /**
     * Get the entity's read notifications.
     *
     * @return \Illuminate\Database\Query\Builder
     */
    public function readNotifications()
    {
<<<<<<< HEAD
        return $this->notifications()->read();
=======
        return $this->notifications()->whereNotNull('read_at');
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
    }

    /**
     * Get the entity's unread notifications.
     *
     * @return \Illuminate\Database\Query\Builder
     */
    public function unreadNotifications()
    {
<<<<<<< HEAD
        return $this->notifications()->unread();
=======
        return $this->notifications()->whereNull('read_at');
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
    }
}
