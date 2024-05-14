{{$slot}}
<form action="{{route('contato')}}" method="post">
    @csrf
    <input type="text" name="nome" placeholder="Nome" class="{{$classe}}">
    <br>
    <input type="tel" name="tel" placeholder="telelfone" class="{{$classe}}">
    <br>
    <input type="email" name="email" placeholder="e-mail" class="{{$classe}}">
    <br>
    <select name="motivo" class="{{$classe}}">
        <option value="">Qual o motivo do contato</option>
        <option value="1">duvida</option>
        <option value="2">elogio</option>
        <option value="3">reclamação</option>
    </select>
    <br>
    <textarea name="mensagem" class="{{$classe}}" cols="30" rows="10"></textarea>
    <input type="submit" name="">
</form>