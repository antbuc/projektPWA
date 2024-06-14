$(function() {
    // Initialize form validation on the registration form.
    // It has the name attribute "registration"
    $("form[name='unosVijesti']").validate({
      // Specify validation rules
      rules: {
        // The key name on the left side is the name attribute
        // of an input field. Validation rules are defined
        // on the right side
        naslov: {
          required: true,
        minlength: 5,
        maxlength: 50,
        
      },
      kratkiSadrzaj: {
          required: true,
          minlength: 10,
        maxlength: 100,
        //   minlength: 3,
          
        },
        sadrzaj:{
          required: true,
        //   equalTo: "#password1",
        // maxlength: 30,
        },
        slika:{
            required: true,
        },
        kategorija:{
            required: true,
        },

      },
      // Specify validation error messages
      messages: {
        naslov: {
          required: "Naslov mora imati 5 do 50 znakova",
          minlength: "Naslov može imati najmanje 5 znakova",
          maxlength: "Naslov može imati najviše 50 znakova",
        },
        kratkiSadrzaj: {
            required: "Kratki sadržaj vijesti mora imati 10 do 100 znakova",
            minlength: "Kratki sadržaj vijesti može imati najmanje 10 znakova",
            maxlength: "Kratki sadržaj vijestiov može imati najviše 100 znakova",
        },
        sadrzaj: {
            required: "Sadržaj vijesti nesmije biti prazna",
          },
        slika: {
            required: "Slika vijesti nesmije biti prazna",
          },
        kategorija: {
            required: "Kategorija vijesti nesmije biti prazna",
          },
     },

      // Make sure the form is submitted to the destination defined
      // in the "action" attribute of the form when valid
      submitHandler: function(form) {
        form.submit();
      }
    });
  });