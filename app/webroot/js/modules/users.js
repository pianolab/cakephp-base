var User = {};

User.init = function () {
  User.validations();
};

User.validations = function () {
  $("#user-form").validate({
    rules: {
      'data[email]': {
        required: true,
        email: true
      },
      'data[password]': {
        required: true
      }
    }
  });
};

$(document).ready( function () { User.init(); });