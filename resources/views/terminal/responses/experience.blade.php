<div class="space-y-4">
    <p class="text-ubuntu-yellow font-bold mb-2">{{ __('terminal.experience_title') }}</p>
    @foreach(__('terminal.experience_jobs') as $job)
        <div>
            <p class="text-ubuntu-green font-bold">{{ $job['title'] }}</p>
            <p class="text-ubuntu-purple text-xs">{{ $job['company'] }}</p>
            <p>{{ $job['description'] }}</p>
        </div>
    @endforeach
</div>
