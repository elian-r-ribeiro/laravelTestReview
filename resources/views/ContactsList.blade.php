<h1>Teste</h1>
@foreach ($contacts as $contact)

<div>
    <p> {{ $contact->name }}</p>
</div>

@endforeach
<form action="/ContactsList/newContact" method="POST">
    @method('POST')
    @csrf
    <button type="submit">Criar contato</button>
</form>

<form action="/ContactsList/updateContact" method="POST">
    @method('PUT')
    @csrf
    <button type="submit">Atualizar contato</button>
</form>