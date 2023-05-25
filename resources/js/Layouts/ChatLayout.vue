<script setup> 
</script>
<template>

<section style="background-color: #eee;">
  <div class="container py-5">

    <div class="row">

      <div class="col-md-6 col-lg-5 col-xl-4 mb-4 mb-md-0">
        <slot name="aside"/>

        

      </div>

      <div class="col-md-6 col-lg-7 col-xl-8 ">

        
            <slot name="form"/>


      </div>

    </div>

  </div>
</section></template>