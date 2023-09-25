<div id="kt_app_content" class="app-content flex-column-fluid">
    <div id="kt_app_content_container" class="app-container container-fluid">
        <div class="card mb-5 mb-xl-8">
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold fs-3 mb-1">{{   $title ?? null  }}</span>
                    <span class="text-muted mt-1 fw-semibold fs-7">{{  $small ?? null }}</span>
                </h3>
                <div class="card-toolbar">
                    {{$button ?? null}}
                </div>
            </div>
            <div class="card-body py-3">
                {{ $slot  }}
            </div>
        </div>
    </div>
</div>
