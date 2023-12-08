<script>
import router from "@/router";

export default {
    name: "LogoutView",
    created() {
        localStorage.removeItem('user')
        this.$store.commit('setToken', null)
        router.push({name: 'home'})
    }
}
</script>
