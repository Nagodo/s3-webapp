<x-layout>
    <p id="errorMessage" class="errormessage"></p>

    <h1>Welcome to My Web Page</h1>
    <p>Create</p>

    <form method="POST" action="{{ route('collectable.store') }}">
        @csrf

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}">
        @error('name') <p class="errormessage">{{ $message }}</p> @enderror

        <label for="amount">Amount:</label>
        <input type="number" id="amount" name="amount" value="{{ old('amount') }}">
        @error('amount') <p class="errormessage">{{ $message }}</p> @enderror

        <button type="submit">Submit</button>
    </form>

    <div class="items" id="items">

    </div>
</x-layout>
