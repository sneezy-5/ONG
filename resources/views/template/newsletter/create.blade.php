

<div class="form">

    <form action="{{ route('newsletter.store') }}" method='POST' enctype="multipart/form-data">
        @csrf
        <div>
            <input type="email" name="email" id="email" placeholder="entrer votre adresse email">
        </div>
        <div>
        <input type="submit" value="Submit" class="send_btn">
        </div>
    </form>
</div>