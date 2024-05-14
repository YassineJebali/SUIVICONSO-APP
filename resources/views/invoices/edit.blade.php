<x-layout>
    <h1>Create a new invoice</h1>
    <form action="/invoices" method="POST">
        @csrf
        <label for="title">Title</label>
        <input type="text" name="title" id="title" required>
        <label for="description">Description</label>
        <textarea name="description" id="description" required></textarea>
        <button type="submit">Save</button>
    </form>
</x-layout>