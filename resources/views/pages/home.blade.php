@extends('layouts.app')
@section('title', 'Accueil - JdServices')

@section('content')
    <x-hero
        ctaButton="true"
    />
    <div class="separator-right"></div>
    <section class="section-wrapper">
        <div class="section-title">
            <h3 class="h1"><span>S</span>ervices</h3>
            <h4 class="h5">Menuiserie, Dépannage, Multi-Services</h4>
        </div>
        <div class="card-group">
            <x-card
                title="Baies et Fenêtres"
                text="Une large gamme de menuiseries bois ou PVC"
                iconClass="fa-solid fa-plus"
                link="#"
                linkClass="btn btn-sm button"
                buttonName="d'infos"
            />
            <x-card
                title="Portes et Portails"
                text="Portail coulissant ou battant, portes de garage sectionnelles"
                iconClass="fa-solid fa-plus"
                link="#"
                linkClass="btn btn-sm button"
                buttonName="d'infos"
            />
            <x-card
                title="Volets et Moustiquaires"
                text="Volets roulants électriques, solaires"
                iconClass="fa-solid fa-plus"
                link="#"
                linkClass="btn btn-sm button"
                buttonName="d'infos"
            />
            <x-card
                title="Dépannages"
                text="Dépannage sur volets roulants PVC ou aluminium"
                iconClass="fa-solid fa-plus"
                link="#"
                linkClass="btn btn-sm button"
                buttonName="d'infos"
            />
        </div>
    </section>
    <div class="separator-left"></div>

    <section class="section-wrapper">
        <div class="section-title">
            <h3 class="h1"><span>P</span>ourquoi choisir <span>JD</span> Travaux Services ?</h3>
            <h4 class="h5">Un Service de Qualité, Un Interlocuteur Unique</h4>
        </div>
        <div class="row">
            <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta mollitia suscipit vitae! Autem culpa deserunt dicta doloribus eveniet, ex excepturi expedita in iste nisi, non repellat saepe sed ut voluptates!</span>
                <span>Error libero, molestias nemo nihil recusandae reprehenderit veniam. Alias consectetur deserunt illum inventore iure magnam magni modi nemo nesciunt officiis quisquam ratione sed, sequi, sint suscipit ut voluptate? Impedit, ut?</span>
                <span>Atque delectus, iusto optio quae sunt temporibus! A at beatae cupiditate dicta doloremque ducimus earum eos excepturi, fugiat impedit laudantium, libero maxime nulla, officiis optio quaerat quibusdam reprehenderit sequi veniam.</span>
                <span>Accusantium cumque eligendi eos eveniet inventore molestias quibusdam recusandae! Cupiditate dolorum est impedit incidunt iusto, natus quae quia reprehenderit saepe similique. Accusamus alias id laborum nihil nisi placeat quisquam voluptatum.</span>
                <span>Accusamus accusantium ad adipisci amet asperiores cupiditate delectus ducimus eaque fugiat itaque laborum, molestiae nemo odit quia quis saepe sint tempora tempore unde velit vitae voluptatem, voluptates? Atque, reprehenderit, voluptate.</span>
                <span>A aperiam consequuntur dignissimos explicabo hic inventore minima molestias nisi tenetur? Cupiditate doloribus, eligendi fugit in iste magnam natus, nostrum quas quibusdam quos repudiandae sapiente sequi similique, sint velit voluptatibus.</span>
            </p>
        </div>
    </section>
    <div class="separator-right"></div>

    <section class="section-wrapper">
        <div class="section-title">
            <h3 class="h1"><span>C</span>e que disent nos <span>C</span>lients</h3>
            <h4 class="h5">Nos avis</h4>
        </div>
        @php $reviews = [[
     'rating' => 5, 'profile_photo_url' => 'https://picsum.photos/200', 'author_name' => 'David', 'text' => 'Accusamus accusantium ad adipisci amet asperiores cupiditate delectus ducimus eaque fugiat itaque laborum, molestiae nemo odit quia quis saepe sint tempora tempore unde velit vitae voluptatem, voluptates? Atque, reprehenderit, voluptate.'],
     ['rating' => 5, 'profile_photo_url' => 'https://picsum.photos/200', 'author_name' => 'Marie', 'text' => 'Accusamus accusantium ad adipisci amet asperiores cupiditate delectus ducimus eaque fugiat itaque laborum, molestiae nemo odit quia quis saepe sint tempora tempore unde velit vitae voluptatem, voluptates? Atque, reprehenderit, voluptate.'],
     ['rating' => 5, 'profile_photo_url' => 'https://picsum.photos/200', 'author_name' => 'Jean', 'text' => 'Accusamus accusantium ad adipisci amet asperiores cupiditate delectus ducimus eaque fugiat itaque laborum, molestiae nemo odit quia quis saepe sint tempora tempore unde velit vitae voluptatem, voluptates? Atque, reprehenderit, voluptate.'],
     ['rating' => 5, 'profile_photo_url' => 'https://picsum.photos/200', 'author_name' => 'Claude', 'text' => 'Accusamus accusantium ad adipisci amet asperiores cupiditate delectus ducimus eaque fugiat itaque laborum, molestiae nemo odit quia quis saepe sint tempora tempore unde velit vitae voluptatem, voluptates? Atque, reprehenderit, voluptate.'],
     ['rating' => 5, 'profile_photo_url' => 'https://picsum.photos/200', 'author_name' => 'Maggy', 'text' => 'Accusamus accusantium ad adipisci amet asperiores cupiditate delectus ducimus eaque fugiat itaque laborum, molestiae nemo odit quia quis saepe sint tempora tempore unde velit vitae voluptatem, voluptates? Atque, reprehenderit, voluptate.']
     ]
        @endphp
        <x-carousel
        :reviews="$reviews"
        />
    </section>
    <div class="separator-left"></div>
@endsection
{{--TODO bottom banner--}}
