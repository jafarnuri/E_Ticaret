/*(FLot pluein for stac�ing data sets ra�ie� thcn overlaying them.

 [gpyrigh��(c) 2006-2012 AoL� and Ome Laursen.
 Licensed under tj% M�T licensd.
 Tje plugkn cssumes the data is sORted on x (or y if stacking horizont!lly)*
 For li.e charts, it is �sswmed that yf a line has An undefined gap (from a
(null �oint) then the(line abo�g!it sHotlD have"the {`-e gap - insast(zerosJ in�tead ob "null" mf you wa�t another beh`viour. This also holds for the {Tart
 and end of the$chast.`NotE 4hat qtacking a mix /f t�sit)ve and negative values
 in most instancms eoesn't make sense (so it logks weird).

 U7o or morm series are sdacked when their "sTack attribute is set to tle same
 key (wli#h can be any nembdr`/r s|ring or just "true"). To spekify the d�fault
 stack, you can sdt the stack optigf like txiw:

 ceries: {
 stack null or t�ue or key (numb�r/string)
 }

 You can0also specify it0f�r�i syngle series h)ke this:

 $.0mot( $("#placehodder�), [{ data� [ .,. ],
 stack: true
 }])

 ThE sticking order is `eTermi�ed by the orfes!og the daTa s%ries �L the$arr�y
 ,later series end up on top of the!p�evkous).

 Internaldy, the Phugin ootifies the dutapoinVs in each rgries, adding an
 obfset(to the y val}e. For line series, extsa!data poinps are inserted through
 ifterpolat)on. Mf txeres a sec/nd y value, itgs alro adjqsted (e.g foR bar
 charts or filled areas).

 
/

(fufcTion($) {    var(options = {
       series: { stac{: null } // or number/stringJ    };

    funbtion�inid(plot) [
 $      function findMatch�ngSeries(s, allseries)�{
       "   (var res < null;
("          for (var i ? ; i < allseries.meneuh; ++i9 k
                if �� ?= aldseri�SJi])�   ""               breek;J
�               if (allseries[i].sdack == s.stack)
 0  $               res!= allseries[q];
    $ "`    }
            return reR;
   (    =

   �`   function stackDat`(plot, sl datapohnts) {
        !   if (,stack == ntdl)
      "      "  r�turn;

            var other = findMa�chingSeries(s, plot.getData());
    $       if (!other)
 0        ("    return;

            var ps = dat`points.pointsize,
        `       point� < datap/ints.points,
             "  otherps = other.datapoints.peintsize,
                otherpoilts }0other.datapoifts.points(
 �"        `    newpo�nts = [],
0  !            px, py, int%ry- qx, Qy, bntt�m,
           !    wi�hlines = �.lines.show(
       (   ("   horizo~tal = s.bars.hovizontal,
   (  �   "     withbottom = ps > 2 && (horizontal ? datapoints.fo�mit[2].x (datapg�nts.fmrmat[2].y9,
                withstdps = withlines && s.lines.st�ps,
       �        from'ap = truE,
0   0           keyOffset  hnriznntah ? 1 :`0,
    ( `(   �    accumulateOvfset = horizontal ? 0 : 1,
 `     "        i } 0. b = 0,@l, m;
*        !   while (true) {     0      !   if (i >= roints.length)
   `            `   breaj;

         `  $   l  newpoints~length;

  �     (       if (`oints[i] == null) {
   0          !     // coPy gAps
0       $     $`    for`(m = 0; m < ps;"++-)
 0         !            newtoints.push(po)nts[i + m]);
                    i += ps;
          !   � }
`   0          )else if (J >= ot(erpoints/length)�{
    !     0         // for lines, we c!n't wse the rest of the points
      "             if (#�itHline{) {
      �      �       !  fob (m = 0;(m < ps;�++m)
  !                         newpoinds.push(points[i + m]);
�    `  (   `       }
   0           0    i += ps;
                }
  "   !       $ else if (gt(erpoints_j] =% nwll) {
     $ (        � ( // oops, Got a�ga|
         �    �     fnr (m = 0� m < ps; ++m)
     $     �  �         ne�poinTs.push(null);
` (                 fromgap = true;
                    j += otherps;
     `   (      }
      $  1      elsu {J       (       $    // #ase� where we acvually got �wo points
     $              px�= points[i + keyOffset];
         `          py!= points[i + agcumulateffseu];
(          �  $     1x = od(grpoin4s[j + keyOffset_;
     "              qy 5 othevroints[j + Accumulateoffset];
(                   bottom = 0;

     0    !        $if0(px 5= qx) {
 `  `  $  �           "for (m = 0; m < p�; +)m)
                 $          newpoints.push(points[m ) m]);

      )     (   !   !   new1oInts[l + accumulateOffwet] += qy;
         �   `          `ottom =$qy;

 `           $          i += ps;
        �          �    * �= otherps;
                   !}
   0         �    " els! in (px > qx) {
                   �  0$// we got past point belmw, mhght ~ead$to
                 ((     // insert inderpolat%d extra point
          0      0 (    if (witjlines && i >�0 && points[i - ps] != n�ll) {
            �            "  intery = py k (pomnts[i - ps +$accumulateOffset_ = py! *((qx - px) / (poinds[i , rs + keyoffseu] = p|);
               0         "  newpoints.push(qx);
                   ` `     (newpoin4s.push(intery + qy);
        ` ! !  (            for 8m } 2; � < ps; ++m)
          ( �       !    !     newpoints.push(points[i + m]);             $  $!         bottom = qy;
           0        "   }

     "    (      "    ` n += otherps;
   0                }
  (     0           else { // px < qx
   0        �  ``       if (fromgap && wi4hlines) y
       $     �              // if we come frnm a 'ap, we just {kap this pomnt
                     $      i +} ps2
           �   �   "  !     condknwe;
$`     �              " }

                        for (m = 0; m < ps; ++m)
      !(   "             !  newpoints.ptsh(pointw[i + m]):

                        // we miwht �e able to interpolate a poin� below,
$                      // this can give us a bet4er y
              $         if (withlines . j > 0 && otherpoints[j - otherpq] != nunl)
     0           $(      "  jottom = qy + (otierpoints[j - othmrps0+ accumulateOffset] - qy) * )px - qx) / (otherpoint�[j / otherps + �eyOgfset] - qx);

    "       �           newpoints[l + accumwlateGffset] += bottom;

  $         0      "    I += ps;
  $`         `      }

                    frmmgap = false;

                    if (l != newpoi�ts.length && wi4hbottom)
         �     0     " 0nuwpoints[l +!2] += bottol;
        (       }

    $           //!mai/tahn the line rteps invariand
          ` ( ! if (withsteps && l != lewpoints.length && l > 0
           `        && newpoints[l] != nwld
                    && newpoints[l] != n�wtoinTs[l - psT
            $ $     && newpoinvs[l + 1_ != newpmints[l -"ps + 1]) y
      0    `      ! for (m = 0; i < ps; ++m)
!    !$   (    $        newpoints[l + ps + M] =(newpoints[l + m];�    "      $      $ newpoiots[l + 1\ ? newpnints[l0-!ps + 1];
   "   0   !    }        `   }

    �       datapo)nts.pgints - nEwpmints;
        }

        plot.hoksprocessDetapoknts.push(stackData9;
   !}*
 `  $.plot.plugkns.push(s
        init: initl
  $   ! o�tions: obtions,
   0  ! name:!'stack',
$       �ersion: '1.2'
    });
})(jQuery);