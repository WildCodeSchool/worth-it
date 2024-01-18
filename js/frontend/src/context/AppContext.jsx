import { createContext, useContext, useMemo, useState } from "react";
import PropTypes from "prop-types";
import { useLoaderData, useNavigate } from "react-router-dom";
import axios from "axios";
import { MDBAlert } from "mdb-react-ui-kit";
import ApiService from "../services/api.service";

const appContext = createContext();

export function AppContextProvider({ children, apiService }) {
  const [infosCustomers, setInfosCustomers] = useState("bob");
  const givenData = useLoaderData();
  const [isAdmin, setIsAdmin] = useState(
    givenData?.preloadUser?.data?.is_admin
  );
  const [user, setUser] = useState(givenData?.preloadUser?.data);
  const [basicDanger, setBasicDanger] = useState(false);
  const [openNavSecond, setOpenNavSecond] = useState(false);

  const navigate = useNavigate();

  const login = async (credentials) => {
    try {
      const data = await apiService.post(
        `http://localhost:5021/login`,
        credentials
      );

      // console.log("Login success. Token:", data.token);

      localStorage.setItem("token", data.token);

      apiService.setToken(data.token);

      const result = await apiService.get(
        "http://localhost:5021/users/personal"
      );

      // console.log("User data from API:", result.data);

      // alert(`Content de vous revoir ${result.data.email}`); // eslint-disable-line no-alert

      setUser(result.data);

      if (result.data.is_admin === 1) {
        navigate("/admin");
      }
      return navigate("/home");
    } catch (err) {
      throw new Error("Identifiants incorrects"); // eslint-disable-line no-alert
    }
  };

  const register = async (newUser) => {
    try {
      const response = await axios.post("http://localhost:5021/users", newUser);

      const newUserResponse = response.data;
      // console.log("User registered successfully. Data:", newUserResponse);

      setUser(newUserResponse);

      alert(`Bienvenue ${newUserResponse.email}`); // eslint-disable-line no-alert
      navigate("/login");
    } catch (err) {
      alert(err.message); // eslint-disable-line no-alert
    }
  };

  const logout = () => {
    setUser(undefined);
    setOpenNavSecond(false);
    localStorage.removeItem("token");
    navigate("/login");
  };

  const contextValues = useMemo(
    () => ({
      isAdmin,
      setIsAdmin,
      user,
      setUser,
      login,
      logout,
      register,
      openNavSecond,
      setOpenNavSecond,
      apiService,
      infosCustomers,
      setInfosCustomers,
    }),
    [
      isAdmin,
      setIsAdmin,
      user,
      setUser,
      login,
      logout,
      register,
      openNavSecond,
      setOpenNavSecond,
      apiService,
      infosCustomers,
      setInfosCustomers,
    ]
  );
  return (
    <appContext.Provider value={contextValues}>
      {children}{" "}
      <MDBAlert
        color="danger"
        autohide
        position="top-right"
        delay={2000}
        appendToBody
        open={basicDanger}
        onClose={() => setBasicDanger(false)}
      >
        Identifiants incorrects !
      </MDBAlert>
    </appContext.Provider>
  );
}

AppContextProvider.propTypes = {
  children: PropTypes.node.isRequired,
  apiService: PropTypes.instanceOf(ApiService).isRequired,
};

export const UseApp = () => useContext(appContext);
