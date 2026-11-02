<x-layout>
    <x-slot:head>
        @vite('resources/css/create.css')
    </x-slot:head>

    <p id="errorMessage" class="errormessage"></p>

    <h1>Welcome to My Web Page</h1>
    <p>Create</p>

    <form id="createForm">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">

        <label for="amount">Amount:</label>
        <input type="number" id="amount" name="amount">
   
        <button type="submit">Submit</button>
    </form>

    <div class="items" id="items">

    </div>
</x-layout>
