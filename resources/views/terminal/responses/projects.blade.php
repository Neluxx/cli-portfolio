<div class="space-y-4">
    <p class="text-ubuntu-yellow font-bold mb-2">{{ __('terminal.projects_title') }}</p>
    @foreach(__('terminal.projects_list') as $project)
        <div>
            <p class="text-ubuntu-green font-bold">{{ $project['name'] }}</p>
            <p>{{ $project['description'] }}</p>
            <p><a href="{{ $project['href'] }}" target="_blank" class="text-ubuntu-blue hover:underline">{{ $project['url'] }}</a></p>
        </div>
    @endforeach
</div>
