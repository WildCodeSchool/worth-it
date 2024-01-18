import React from "react";
import ReactDOM from "react-dom/client";

import { createBrowserRouter, RouterProvider } from "react-router-dom";

import App from "./App";

import "mdb-react-ui-kit/dist/scss/mdb.dark.scss";
import "@fortawesome/fontawesome-free/css/all.min.css";
import PageTest from "./pages/PageTest";

const router = createBrowserRouter([
  {
    path: "/",
    element: <App />,
  },
  {
    path: "/pagetest",
    element: <PageTest />,
  },
]);

const root = ReactDOM.createRoot(document.getElementById("root"));

root.render(
  <React.StrictMode>
    <RouterProvider router={router} />
  </React.StrictMode>
);
