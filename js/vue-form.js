new Vue({
      el: "#app",
      data: {
        formData: {
          name: "",
          email: "",
          message: "",
          contactMethods: []
        }
      },
      methods: {
        submitForm() {
          console.log("Form başariyla gönderildi!");
          console.log(this.formData);
        },
        resetForm() {
          this.formData = {
            name: "",
            email: "",
            message: "",
            contactMethods: []
          };
        }
      }
    });