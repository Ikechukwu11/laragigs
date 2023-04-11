@props (['listing'])

<div class="col-12 col-lg-6 my-4">
  <x-card>
    <div class="d-flex flex-column flex-md-row" style="gap: 20px">
      <img src={{$listing->logo ? asset('storage/'.$listing->logo) : asset('/images/no-image.png')}} width="70" style="object-fit: contain; flex-basis: 30%" class="d-none d-md-flex listing-card-img img-fluid">
      <div style="flex-basis: 70%" class="fw-bold listing-card-details">
        <small>
          <p>
            <a class="text-dark" href="/listings/{{$listing->id}}">{{$listing->title}}</a>
          </p>
          <p>
            <span>{{$listing->company}}</span>
          </p>
          <p>
            <x-listing-tags :listingTags="$listing->tags" />
          </p>
          <p>
            <i class="fa-solid fa-location-dot me-3"></i>{{$listing->location}}
          </p>
        </small>
      </div>
    </div>
  </x-card>


</div>