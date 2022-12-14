const listItems = [
  { id: 1, name: "Caneta", quantity: "15" },
  { id: 2, name: "Caneta", quantity: "15" },
  { id: 3, name: "Caneta", quantity: "15" },
  { id: 4, name: "Caneta", quantity: "15" },
  { id: 5, name: "Caneta", quantity: "15" },

  { id: 6, name: "CanetaAzul", quantity: "15" },
  { id: 7, name: "CanetaAzul", quantity: "15" },
  { id: 8, name: "CanetaAzul", quantity: "15" },
  { id: 9, name: "CanetaAzul", quantity: "15" },
  { id: 10, name: "CanetaAzul", quantity: "15" },
];

let userListContainer = document.querySelector("#list");
let paginationContainer = document.querySelector("#pagination");

let currentPage = 1;
let rowsCount = 5;

let listItemsFragment = document.createDocumentFragment();

function displayUesrsList(
  allUesrsArray,
  usersContainer,
  rowsCount,
  currentPage
) {
  usersContainer.innerHTML = "";

  let endIndex = rowsCount * currentPage;
  let startIndex = endIndex - rowsCount;

  let paginatedUsers = allUesrsArray.slice(startIndex, endIndex);

  paginatedUsers.forEach(function (user) {
    let userElement = document.createElement("div");
    userElement.classList.add("item");
    userElement.innerHTML = user.name + " " + user.quantity;

    listItemsFragment.appendChild(userElement);

    usersContainer.appendChild(listItemsFragment);
  });
  console.log(paginatedUsers);
}

function setupPagination(allUesrsArray, paginationContainer, rowsCount) {
  paginationContainer.innerHTML = "";

  let pageCount = Math.ceil(allUesrsArray.length / rowsCount);

  for (let index = 1; index < pageCount + 1; index++) {
    let btn = paginationBtnGenerate(allUesrsArray, index);

    listItemsFragment.appendChild(btn);

    paginationContainer.appendChild(listItemsFragment);
  }
}

function paginationBtnGenerate(allUesrsArray, page) {
  let btnElement = document.createElement("button");
  btnElement.innerHTML = page;

  if (currentPage === page) {
    btnElement.classList.add("active");
  }

  btnElement.addEventListener("click", () => {
    currentPage = page;
    displayUesrsList(allUesrsArray, userListContainer, rowsCount, currentPage);
    setupPagination(allUesrsArray, paginationContainer, rowsCount);
  });
  return btnElement;
}

displayUesrsList(listItems, userListContainer, rowsCount, currentPage);
setupPagination(listItems, paginationContainer, rowsCount);
