<div id="tools" class="-area ovroleserflow-hidden default-padding">
    <div class="container-tools-title">
        <h2>Tools</h2>
    </div>
    <div class="marquee-container">
        <div class="marquee-content">
            {{-- isinya --}}
                <div class="container-tools-content">
                    @foreach ($tools as $tool)
                        <div class="card-tools">
                            <img src="{{ $tool->tool_image_url }}" class="tools-image" alt="tool">
                        </div>
                    @endforeach
                    
                    {{-- <div class="card-tools">
                        <img src="assets/img/tools-logo/google-bigQuery.png" class="tools-image" alt="...">
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>