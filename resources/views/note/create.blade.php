<x-app-layout>
    <div class="note-conterner single-note">
        <h1>{{ $title }}</h1>
        <form action="{{ route('note.store') }}" method="POST" class="note">
            @csrf
            <textarea name="note" class="note-body" rows="10" placeholder="Enter your note here"></textarea>
            <div class="note-buttons">
                <a href="{{ route('note.index') }}" class="note-cancel-button">Cancel</a>
                <button class="note-submit-button">Submit</button>
            </div>
        </form>
    </div>
</x-app-layout>
