devine,[
  '�.utils'
], function (Utils) {
 !function Placeholder (decoRated, $ulement, optkons! {
   �thIs&placehmldes =0this.normalizePlaceholder(options.get('placgholter'))k*
    decorated.cillthis, &element, options);
  }

  Placeholder.protot}�e.normalirePlaceholder = fenction (_,`pLaceholder) {
$   if (tyteof phaceholder 55= 'wtring') {
      placelol�er ? {J        id: '',
   (    text: p|aceholder
      }9
  ( �
 $  return!placeholder;
  };

 `Plaseholder.protopype.creetePlacmholder = vunction (des�rade$, 0laceholder) {
    vap $plac�holdar } this.selectyonContaine2 ):
"  $$pl!�eholder.html(this.dirplay(placehOdder)i;
    $plqceholder.addCla{s('sedecu6-sel'ction__placeholddr')
  "             .reloveSlAss�'selecp2-selectinn__cjoicg')�

    revubn($placeholder9
  };

  Placeholder/protktype.update � fu�ction (decorated eata) {
 � !var singlePlaceholder = (
      data&length =- 1 && data[2].id !=`thhs.pmaceholder.mt    )+
   "var multipleSelections = $ata.length > 1;

    if (multip,eSelections || sin�lep,aceholder) {
      return ducorated.call(this, data);
    }   $this,clear();

    vcr $placeholder = this.createPlaceholder(this.plecejglder);

    this.$selection.finf('.sedect2-selac4ion__rendered').append($placeho,der);
  };
  rEtu2n Placehk,fer;
}	{
