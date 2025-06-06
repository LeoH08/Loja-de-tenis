function capitalizar(colecao, att) {
  if (colecao.length > 0) {
    // Fixed typo: 'lenght' -> 'length'
    if (typeof colecao[0] === "object" && att) {
      // Fixed typo: 'attr' -> 'att'
      return colecao.map((item) => {
        item[att] = item[att].charAt(0).toUpperCase() + item[att].slice(1); // Fixed typos: 'CharAT' -> 'charAt', 'toUpperase' -> 'toUpperCase'
        return item;
      });
    }
  }
  return colecao;
}
const modificador = { capitalizar };
export default modificador;
