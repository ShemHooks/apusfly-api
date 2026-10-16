<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'first_name' => $this->first_name,
            'middle_name' => $this->middle_name,
            'last_name' => $this->last_name,
            'full_name' => $this->full_name,
            'email' => $this->email,
            'phone' => $this->phone,
            'status' => $this->status,
            'email_verified_at' => $this->email_verified_at,
            'profile_photo_path' => $this->profile_photo_path,

            'roles' => $this->whenLoaded(
                'roles',
                fn() => $this->roles
                    ->pluck('name')
                    ->values()
            ),

            'permissions' => $this->whenLoaded(
                'roles',
                fn() => $this->roles
                    ->where('scope', 'platform')
                    ->flatMap(
                        fn($role) =>
                            $role->permissions->pluck('name')
                    )
                    ->unique()
                    ->values()
            ),
        ];
    }
}
