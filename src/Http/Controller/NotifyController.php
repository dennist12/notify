<?php

namespace Notify\Http\Controller;

use Illuminate\Notifications\Notifiable;
use Illuminate\Http\Request;
use Illuminate\Notifications\DatabaseNotification;
use App\Http\Controllers\Controller;

class NotifyController extends Controller
{
    /**
     * Count unread notifications
     * @return Number
     */
    public function countNotifications()
    {
        return auth()->user()->notifications()->whereNull('read_at')->get();
    }

    /**
     * Display notification
     * @return Arrray
     */
    public function index(Request $request)
    {
       
        $notifications = auth()->user()
            ->notifications() -> paginate();


        return view('notify::notifications.index', compact('notifications'));
    }

    /**
     * Mark Read notification
     * @param Array
     * @return null
     */
    public function markRead(Request $request) : Void
    {
        $notification = DatabaseNotification::find($request->id);
        auth()->user()->unreadNotifications->
            where('id', $notification->id)
            ->markAsRead();
    }

    /**
     * Mark Unread Notification
     */
    public function markUnread(Request $request)
    {
    }

    public function markAllRead() : void
    {
        auth()->user()->unreadNotifications()->update(['read_at' => now()]);
    }
}
