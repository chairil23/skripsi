<template>
    <div>
        
        <headers/>
        <slider></slider>      
        <div class="container">
            <side-bar></side-bar>      
            <router-view></router-view>             
        </div>
                      
        <footers></footers>
        
    </div>
</template>

<script>
    import Headers from './view/partial/Header.vue'
    import Footers from './view/partial/Footerss.vue'
    import SideBar from './view/partial/Sidebar.vue'
    import Contents from './view/partial/Contents.vue'
    import Slider from './view/partial/Slider'
    export default {
        components: {
            Headers,
            Slider,
            SideBar,
            Contents,
            Footers
        }
    }
</script>
