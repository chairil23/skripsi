<template>
    <div>
        
        <navbar></navbar>      
        <div class="container">      
        <router-view></router-view> 
        <router-view name="main"></router-view>
        </div>
                      
        <footers></footers>
        
    </div>
</template>

<script>
    import Navbar from './view/partial/Navbar.vue'
    import Footers from './view/partial/Footerss.vue'
    import SideBar from './view/partial/Sidebar.vue'
    import Contents from './view/partial/Contents.vue'
    export default {
        components: {
            Navbar,
            SideBar,
            Contents,
            Footers
        }
    }
</script>
