<div id="roles" class="-area ovroleserflow-hidden py-5">
    <div class="container-roles-title">
        <h2>Roles</h2>
    </div>
    <div class="row row-cols-2 row-cols-lg-4">
        @foreach ($roles as $role)
        {{-- single item --}}
        <div class="container-roles-content">
            <div class="roles-card p-3">
                @if (Str::contains($role->role_image_url, ['http://', 'https://']))
                <img src="{{ $role->role_image_url }}" class="role-img" alt="roles{{ $role->role_id }}" width="100"
                    height="100">
                @else
                <img src="{{ asset('storage/roles/' . $role->role_image_url) }}" class="role-img" alt="person"
                    width="100" height="100">
                @endif
                <div class="container-text mt-3">
                    <p class="roles-title" style="word-wrap:break-word">{{ $role->role_name }}</p>
                </div>
            </div>
        </div>
        {{-- end single item --}}

        @endforeach

    </div>

</div>