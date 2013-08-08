var Duty = {};

Duty.init = function () {
  Duty.validations();
};

Duty.validations = function () {
  $("#duty-form").validate({
    rules: {
      'data[cooperator_id]': {
        required: true
      },
      'data[hospital_id]': {
        required: true
      },
      'data[weekday]': {
        required: true
      },
      'data[shift]': {
        required: true
      },
      'data[released_at]': {
        required: true,
        date: true
      }
    }
  });
};

$(document).ready( function () { Duty.init(); });