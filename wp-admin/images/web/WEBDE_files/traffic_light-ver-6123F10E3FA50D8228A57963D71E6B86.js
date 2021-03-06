var trafficLight = (function () {
var validations = {
minLength: function (s) {
return s.length >= 8
? 30
: 0
},
atLeastOneNumber: function (s) {
return /\d+/.test(s)
? 20
: 0
},
containsUpperAndLowerCase: function (s) {
return /[a-z]/.test(s) && /[A-Z]/.test(s)
? 25
: 0
},
specialCharacters: function (s) {
return /[\!\u00A7\$\%\&\=\?\*\<\>\(\)\/\"\^\"\'\`\~\+\#\,\.\;\:\_\[\]\{\}\@\|\\\-]+/.test(s)
        ? 25
        : 0
    }

  };


  function validationScore(s) {
    var score = validations.minLength(s);
    if (!score) return 0;

    score += validations.atLeastOneNumber(s);
    score += validations.containsUpperAndLowerCase(s);
    score += validations.specialCharacters(s);

    return score
  }

  function getColor(score) {
    var yellow = '#f0bc00';
    var green = '#5cb82a';
    if (score > 0 && score <= 50) {
      return yellow;
    }
    if (score > 50) {
      return green;
    }
  }


  function changeColor() {
    var input = document.querySelector('.password-input');
    var indicator = document.querySelector('.progressbar__indicator');

    input.addEventListener('input', function (e) {
      var score = validationScore(e.target.value);
      console.log(e.target.value);
      var color = getColor(score);

      indicator.style.width = score > 100 ? '100%' : score + '%';
      indicator.style.backgroundColor = color;
    });
  }


  function init() {
    changeColor();
  }

  return {init: init};
})();


// Used only to hide error messages for ULI inputs
var passwordChangeForm = (function () {
  var classNames = {
    block: 'b-password-change',
    gridCell: 'grid__cell',
    hasError: 'hasError',
    feedBackPanel: 'feedbackPanel',
    formMessage: 'form-message'
  };


  function hideErrors() {
    // using window because block is injected via Wicket
    window.addEventListener('input', function (e) {
      if (e.target.classList.contains(classNames.hasError)) {
        var errorCell = e.target.closest('.'+classNames.gridCell);
        errorCell.classList.remove(classNames.hasError);
        var errorPanel = errorCell.querySelector('.' + classNames.feedBackPanel);
        errorPanel.style = 'display:none';
      }
    });
  }

  function init() {
    var block = document.querySelector('.' + classNames.block);
    if (block) {
      hideErrors();
    }
  }

  return {init: init};
})();


document.addEventListener('DOMContentLoaded', function () {
  trafficLight.init();
  passwordChangeForm.init();
});


/*----------------------------------------------------------------------------------------------------------
|             This polyfill is used only in this script. If you need it for other scripts - move it to a   |
               separate file                                                                               |
----------------------------------------------------------------------------------------------------------*/

if (!Element.prototype.matches) {
  Element.prototype.matches = (Element).prototype.msMatchesSelector ||
    Element.prototype.webkitMatchesSelector;
}

if (!Element.prototype.closest) {
  Element.prototype.closest = function (s) {
    var el = this;

    do {
      if (el.matches(s)) return el;
      el = el.parentElement || el.parentNode;
    } while (el !== null && el.nodeType === 1);
    return null;
  };
}