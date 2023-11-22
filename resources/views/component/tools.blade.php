<div id="tools" class="-area ovroleserflow-hidden default-padding">
    <div class="container-tools-title">
        <h2>Tools</h2>
    </div>
    <div class="marquee-container">
        <div class="ke-kanan">
            <div class="marquee-content">
                <div class="container-tools-content">
                    @foreach ($tools as $tool)
                        <div class="card-tools">
                            <div class="img-tools">
                                @if (Str::contains($tool->tool_image_url, ['http://', 'https://']))
                                    <img src="{{ $tool->tool_image_url }}" class="card-img-top" alt="tool">
                                @else
                                    <img src="{{ asset('storage/tools/' . $tool->tool_image_url) }}" class="card-img-top" alt="tool">
                                @endif
                            </div>
                            <div class="desc-tools">
                                <h4>Title</h4>
                                {{-- <h4>{{ $tool->tool_name }}</h4> --}}
                                <p>Description</p>
                                {{-- <p>{{ $tool->tool_desc }}</p> --}}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="marquee-content">
                <div class="container-tools-content">
                    @foreach ($tools as $tool)
                        <div class="card-tools">
                            <div class="img-tools">
                                @if (Str::contains($tool->tool_image_url, ['http://', 'https://']))
                                    <img src="{{ $tool->tool_image_url }}" class="card-img-top" alt="tool">
                                @else
                                    <img src="{{ asset('storage/tools/' . $tool->tool_image_url) }}" class="card-img-top" alt="tool">
                                @endif
                            </div>
                            <div class="desc-tools">
                                <h4>Title</h4>
                                {{-- <h4>{{ $tool->tool_name }}</h4> --}}
                                <p>Description</p>
                                {{-- <p>{{ $tool->tool_desc }}</p> --}}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="ke-kiri">
            <div class="marquee-content-reverse">
                <div class="container-tools-content">
                    @foreach ($tools as $tool)
                        <div class="card-tools">
                            <div class="img-tools">
                                @if (Str::contains($tool->tool_image_url, ['http://', 'https://']))
                                    <img src="{{ $tool->tool_image_url }}" class="card-img-top" alt="tool">
                                @else
                                    <img src="{{ asset('storage/tools/' . $tool->tool_image_url) }}" class="card-img-top" alt="tool">
                                @endif
                            </div>
                            <div class="desc-tools">
                                <h4>Title</h4>
                                {{-- <h4>{{ $tool->tool_name }}</h4> --}}
                                <p>Description</p>
                                {{-- <p>{{ $tool->tool_desc }}</p> --}}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="marquee-content-reverse">
                <div class="container-tools-content">
                    @foreach ($tools as $tool)
                        <div class="card-tools">
                            <div class="img-tools">
                                @if (Str::contains($tool->tool_image_url, ['http://', 'https://']))
                                    <img src="{{ $tool->tool_image_url }}" class="card-img-top" alt="tool">
                                @else
                                    <img src="{{ asset('storage/tools/' . $tool->tool_image_url) }}" class="card-img-top" alt="tool">
                                @endif
                            </div>
                            <div class="desc-tools">
                                <h4>Title</h4>
                                {{-- <h4>{{ $tool->tool_name }}</h4> --}}
                                <p>Description</p>
                                {{-- <p>{{ $tool->tool_desc }}</p> --}}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>   
{{-- 
        
        <div class="marquee-content-reverse">
            <div class="container-tools-content">
                @foreach ($tools as $tool)
                    <div class="card-tools">
                        <img src="{{ $tool->tool_image_url }}" class="tools-image" alt="tool">
                    </div>
                @endforeach
            </div>
            <div class="container-tools-content">
                @foreach ($tools as $tool)
                    <div class="card-tools">
                        <img src="{{ $tool->tool_image_url }}" class="tools-image" alt="tool">
                    </div>
                @endforeach
            </div>
        </div>
 --}}

    </div>
</div>