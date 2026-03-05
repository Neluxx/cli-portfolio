<div class="space-y-4">
    <p class="text-ubuntu-yellow font-bold mb-2">{{ __('terminal.education_title') }}</p>
    <div>
        <p class="text-ubuntu-green font-bold">{{ __('terminal.education_degree') }}</p>
        <p class="text-ubuntu-purple text-xs">{{ __('terminal.education_university') }}</p>
        <p class="text-ubuntu-green">{{ __('terminal.education_thesis_label') }}</p>
        <ul class="list-disc list-inside ml-2 space-y-0">
            <li>{{ __('terminal.education_thesis_item') }}</li>
        </ul>
        <p class="text-ubuntu-green">{{ __('terminal.education_engagement_label') }}</p>
        <ul class="list-disc list-inside ml-2 space-y-0">
            @foreach(__('terminal.education_engagement_items') as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    </div>
</div>
