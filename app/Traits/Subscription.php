<?php

namespace App\Traits;

use App\Models\Subscriber;
use Illuminate\Database\Eloquent\Collection;

trait Subscription {
    public function getSubscribers()
    {
        $subscribers = [];

        if (auth()->user()->isCompany()){
            $subscribers = Subscriber::with(['organization', 'category'])
                ->where('company_id', auth()->user()->company->id)->latest()->limit(5)->get();
        }
        else{
            $subscribers = Subscriber::with(['organization', 'category'])
                ->where('user_id', auth()->user()->id)->latest()->limit(5)->get();
        }

        return $subscribers;
    }
}
