import React from "react";
import ReactDOM from "react-dom/client";

import { createBrowserRouter, RouterProvider } from "react-router-dom";

import App from "./App";

import "mdb-react-ui-kit/dist/scss/mdb.dark.scss";
import "@fortawesome/fontawesome-free/css/all.min.css";
import QuizzPage from "./pages/QuizzPage";
import RecommandationPage from "./pages/RecommandationPage";
import { AppContextProvider } from "./context/AppContext";
import ApiService from "./services/api.service";
import ShopPage from "./pages/ShopPage";
import ProductPage from "./pages/ProductPage";
import Register from "./pages/Register";
import Login from "./pages/Login";
import FacePage from "./pages/FacePage";
import Result from "./pages/Result";

const apiService = new ApiService();

const router = createBrowserRouter([
  {
    path: "/",
    // loader: async () => {
    //   try {
    //     const token = localStorage.getItem("token");

    //     if (token) {
    //       apiService.setToken(token);

    //       const [userData] = await apiService.get(
    //         "http://localhost:5021/users/personal"
    //       );
    //       return {
    //         preloadUser: userData ?? null,
    //       };
    //     }

    //     return null;
    //   } catch (err) {
    //     console.error("Loader Error:", err.message);
    //     return null;
    //   }
    // },
    element: (
      <AppContextProvider apiService={apiService}>
        <App />
      </AppContextProvider>
    ),
    children: [
      { path: "/", element: <Register /> },
      {
        path: "/quizz",
        element: <QuizzPage />,
      },
      {
        path: "/register",
        element: <Register />,
      },
      {
        path: "/login",
        element: <Login />,
      },
      {
        path: "/recommandation",
        element: <RecommandationPage />,
      },
      {
        path: "/shops",
        element: <ShopPage />,
      },
      {
        path: "/product/:id",

        element: <ProductPage />,
      },
      {
        path: "/changeface",

        element: <FacePage />,
      },
      {
        path: "/result",

        element: <Result />,
      },
    ],
  },
]);

const root = ReactDOM.createRoot(document.getElementById("root"));

root.render(
  <React.StrictMode>
    <RouterProvider router={router} />
  </React.StrictMode>
);
