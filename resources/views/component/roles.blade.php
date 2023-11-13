<div id="roles" class="-area ovroleserflow-hidden default-padding">
    <div class="container-roles-title">
        <h2>Roles</h2>
    </div>
    <div class="row row-cols-2 row-cols-lg-4">
        @foreach ($roles as $role)
        {{-- single item --}}
        <div class="container-roles-content">
            <div class="roles-card">
                <img class="image-roles" src="{{ asset('assets/img/icon/CEO-Roles.png') }}">
                {{-- <img class="image-roles" src="{{ $role->role_image_url }}"> --}}
                <div class="container-text">
                    {{-- <p class="roles-title">CEO of the Company</p> --}}
                    <p class="roles-title" style="word-wrap:break-word">{{ $role->role_name }}</p>
                </div>
            </div>
        </div>
        {{-- end single item --}}
            
        @endforeach
        
    </div>
    
</div>