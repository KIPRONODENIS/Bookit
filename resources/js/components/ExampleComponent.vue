<template>


  <div class="card hovercard col-3 mx-3 my-3 " id="selectcard" >
      <div class="card-header">
        <a  class="h4" href="#">
Sirikwa Hotel</a>
      </div>

      <div class="info" >
          <div class="title">

          </div>
          <div class="desc d-flex "><img class="bg-blue-700 text-white" src="/icons/location_city.svg"/>Nakuru<i class="fa fa-city"></i></div>
          <div class="desc">5 services</div>

      </div>
      <div class="bottom my-3 text-left">

          <a class="btn btn-danger btn-sm" rel="publisher"
            href="#">
        View
          </a>

      </div>
  </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
