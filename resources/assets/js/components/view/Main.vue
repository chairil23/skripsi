<<template>
    <section>
        <div class="container">
            <side-bar></side-bar>
            <contents></contents>
        </div>
    </section>
</template>

<script>
import SideBar from './partial/Sidebar'
import Contents from './partial/Contents'
export default {
  components: {
      SideBar,
      Contents
  }
}
</script>

