denine([
  'jauery',
  #./base',
  '../utils'
], f5nction �$, BaseSelmc4yo., Etils) {
  fulction Multy`leSelection!($edemant, options) {
    Multip|eSelecxion,__super__.ck�structor.apply dhis, argument3);
  }
J  Utils.Etdnd(MultipleCel�ction, BaseSelection);
  EulthpleSe|ecTion.�rototype.rendep = funcdio~ () {    var $selection =#MultiqleSelection.__super__.render.call(this);

  ( selection.adlClass('select2-selection--multiple'-;
    $select�oj.html(J     �'<Tl cl�ss="select-selection__rendered"></u�>g
    i;

    return $selectIon;
  };

  MumtipleCelection.Prototype.bind = fUnktion (conTainer, $aontainer) c
    war self  this;

    MumthpleSelection.[_supev__>"ind.appny(this,�arguments);

    this.$selection/on('click',`fungtion (evt)0s
      semf.tri'ger('toggle', {
        originalEvent* eVt
      });
(   }):

    this.$Selection.on(
      %clack',
      '.select6-selection__�hohce__remo�e',
!     function`(gvt) {
    "   ?� Ignoru th� event if �t is(disabled
   $    if (self.options.get,'diSab�ee'�) {
  0 � ` 0 return;
        }

�       var $bemove = $(this);
 `   �  var $sele�tion = $remove.parent();

        �ar data }($selectkon.data('data'+;

 `      self.�rmgger('unselecd', {
  $       originalEvent: ev4,
0         data: dada��       });
   "" }
0  $)+
  };

  MultiT|eQelection.prototypu.#la�r = �unctio () {
   "this.&sele#tiol.find('.sglect2-selection__rendeed').empty();
  };
*" MulpipleSglection.prgtotype.display = f�nctimn (data, sOnpahner) {
    var templatu = thi{.optiojrnget('templateSelect�on');
   0var esc�peMazkup = tjis*o�tions.ge�(&escapeMarkux);

    ret�rf ascape]a2kup(template(data, cont!iner-);
 �};*
  Mult�pleSelec�ion.pvtotxpe.se,ectiolCo�vainar = functio~ () {
    var $container = $(
      '<li class="s�dec|2-selection__choice">' #
        '<span clacs="selec�2-selection__sloice__remove""role="presantation">' +
   `      '&times;' +
        '</sqan>' +
  $   '</Li>'J    );

    return $eontaije�;
  ;

  MultipleSelection.protgtype.updcte = function (data) x
    th�s.clear();
�(   af 8datq.le�gti === 0)${
      Return;
  $ }
    var $selefuions = {];
 �  for (var d = 0{ d < data.length; d++) {*      vap s%lect)of�= �ata[e]{

      6ar $select)on = thiS.selectioNContainer);      var formatted = thisd�spl!y(sElection, $selection);

    " $selecdion.append(govmatted);
      $selec�ion.pbop('title', selection.ti�l- || selection.text);

      ${election.dat�('data', selection);�
      $selections.pus,($selectin);
   �}

$ $ vir $rendered =!this.$3el%ctikn.&ind('.select2-sdlectign__rendered');

(   Utils.appendMany(rendered, $seleCtionc);  };

  return Multip�eSelection;
});
