const { createApp } = Vue;

createApp({
  data() {
    return {
      message: "Hello Vue!",
    };
  },

  created() {
    axios
      .get("http://localhost/php-dischi-json/API/get-disks.php")
      .then((results) => {
        console.log(results);
      });
  },
}).mount("#app");
