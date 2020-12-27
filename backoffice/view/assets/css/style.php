div {
  margin-bottom 10px;
  position relative;
}

input[type=number] {
  width 100px;
}

input + span {
  padding-right 30px;
}

inputinvalid+spanafter {
  position absolute;
  content '✖';
  padding-left 5px;
}

inputvalid+spanafter {
  position absolute;
  content '✓';
  padding-left 5px;
}