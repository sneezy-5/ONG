

    <form action="{{ route('newsletter.store') }}" method='POST' enctype="multipart/form-data" class="d-flex formheader">
        @csrf
            <input class="form-control me-2 newsletterheader" name="email" type="email" placeholder="New letter">
            <button class="btn btn-outline-success" type="submit">Envoyer</button>

    </form>