@extends('dashboard.layouts.dashboard-inside')

@section('content')

    <!-- Show Caught Errors -->
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>

    <!-- Open Form -->
    <form method="post" action="{{ route('hatstories.store') }}" enctype="multipart/form-data">
        @csrf
            <!-- Cover -->
            <p>Boek</p>
            <!-- Hat Cover Title -->
            <div>
                <label for="hat_cover_title">Title
                    <input type="text" name="hat_cover_title" required>
                </label>
                @error('hat_cover_title')
                <p>{{ $message }}</p>
                @enderror
            </div>
            <!-- Hat Cover Text -->
            <div>
                <label for="hat_cover_text">Text
                    <textarea name="hat_cover_text" required></textarea>
                </label>
                @error('hat_cover_text')
                <p>{{ $message }}</p>
                @enderror
            </div>
            <!-- Hat Cover Image -->
            <div>
                <label for="hat_cover_image">Image
                    <input type="file" name="hat_cover_image" required>
                </label>
                @error('hat_cover_image')
                <p>{{ $message }}</p>
                @enderror
            </div>

            <!-- Page One -->
            <p>Pagina 1</p>
            <!-- Page One Title -->
            <div>
                <label for="hat_pageone_title">Title
                    <input type="text" name="hat_pageone_title" required>
                </label>
                @error('hat_pageone_title')
                <p>{{ $message }}</p>
                @enderror
            </div>
            <!-- Hat Cover Heading -->
            <div>
                <label for="hat_pageone_heading">Heading
                    <input type="text" name="hat_pageone_heading" required>
                </label>
                @error('hat_pageone_heading')
                <p>{{ $message }}</p>
                @enderror
            </div>
            <!-- Hat Cover Text -->
            <div>
                <label for="hat_pageone_text">Text
                    <textarea name="hat_pageone_text" required></textarea>
                </label>
                @error('hat_pageone_text')
                <p>{{ $message }}</p>
                @enderror
            </div>
            <!-- Hat Cover Image -->
            <div>
                <label for="hat_pageone_image">Image
                    <input type="file" name="hat_pageone_image" required>
                </label>
                @error('hat_pageone_image')
                <p>{{ $message }}</p>
                @enderror
            </div>

            <!-- Page Two -->
            <p>Pagina 2</p>
            <!-- Page Two Title -->
            <div>
                <label for="hat_pagetwo_title">Title
                    <input type="text" name="hat_pagetwo_title" required>
                </label>
                @error('hat_pagetwo_title')
                <p>{{ $message }}</p>
                @enderror
            </div>
            <!-- Hat Cover Heading -->
            <div>
                <label for="hat_pagetwo_heading">Heading
                    <input type="text" name="hat_pagetwo_heading" required>
                </label>
                @error('hat_pagetwo_heading')
                <p>{{ $message }}</p>
                @enderror
            </div>
            <!-- Hat Cover Text -->
            <div>
                <label for="hat_pagetwo_text">Text
                    <textarea name="hat_pagetwo_text" required></textarea>
                </label>
                @error('hat_pagetwo_text')
                <p>{{ $message }}</p>
                @enderror
            </div>
            <!-- Hat Cover Image -->
            <div>
                <label for="hat_pagetwo_image">Image
                    <input type="file" name="hat_pagetwo_image" required>
                </label>
                @error('hat_pagetwo_image')
                <p>{{ $message }}</p>
                @enderror
            </div>

        <button>Create</button>
    </form>

@endsection

@section('css')

@endsection

@section('js')

@endsection
