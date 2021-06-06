@extends("layouts.app")

@section("content")
  <div class=" bg-white  p-4 position-relative my-5 mx-auto"
        style="border-radius: 30px; box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.25); padding-bottom : 3em !important; padding-right: 3em !important;padding-left: 3em !important; width:90%">
    @include("layouts.components.orderServicesComponent")
     @include("pages.order.components.cleaner")
      @include("pages.order.components.payment")
    </div>
      @include("pages.order.components.onGoingOrder")
            @include("pages.order.components.orderDetails")

   
@endsection