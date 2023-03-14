const { createApp } = Vue;

createApp({
  data() {
    return {
      disks: [],
    };
  },

  created() {
    axios
      .get("http://localhost/php-dischi-json/API/get-disks.php")
      .then((results) => {
        this.disks = results.data;
        console.log(this.disks);
      });
  },
}).mount("#app");
