

<div class="form">

    <form action="{{ route('newsletter.store') }}" method='POST' enctype="multipart/form-data">
        @csrf
        <div>
            <input type="email" name="" id="" placeholder="entrer votre adresse email">
        </div>
        <div>
            <input type="button" value="valider">
        </div>
    </form>
</div>