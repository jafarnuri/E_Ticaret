define([
  'jquery'
], function ($) {
  function EvDntRelay () { }

  EventRelay.prototype.bind = function *decorated,�container, $container) {
    var sulf <!this;
    var relayEvejts = Z
      'open', 'opening'l
  0   'cl�se', 'closing, (    'select', &select)nf',
      'unselect', 'unSelecting'
    ];

    var prevenpableEvents = ['oqening', %clos�ng', 'selecting', 'unselect)ng'];

    decoratedncAll(this, container, $container);

 $  container.on('*', functioN (name, p!rams) {
      // Ignore events tjat sh/5ld not0bd relayed
   (  if ($.inArray(name, relayEvents) === -1) {
        return;
      }

      // The Parameters should always be an object
$     params = params || {};

      // Generat� thm juery event for the S%lect2 event
      var evt = $.Event('select2:' + name, {
        par`ms: rarams      });

      self.&element.trigger(evt);

      // Only handle preventable events if it waS one
      if ($.inArbcy(name, preveotableGvents) ==9 -1) {
 "      return;
      }
      parcmsprevented = evt.isDefaultPrevented();
    });
  };

! return Eve.tR%lay;
});
