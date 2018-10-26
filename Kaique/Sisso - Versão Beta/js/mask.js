/* FIELD CPF */

  var $MASKCPF = $(".cpf");
  $MASKCPF.mask('000.000.000-00', {reverse: true});

/* FIELD DATE */

  var $MASKDATE = $(".date");
  $MASKDATE.mask('00/00/0000');

  /* FIELD CEP */

  var $MASKCEP = $(".cep");
  $MASKCEP.mask('00000-000');

  /* FIELD TELEPHONE */
  var $MASKTEL = $(".tel");
  $MASKTEL.mask('(00)0000-00000');

 /* FIELD HOURS */
 var $MASKHOURS = $(".hours");
 $MASKHOURS.mask('00:00:00');
