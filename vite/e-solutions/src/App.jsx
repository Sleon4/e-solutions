import { Container } from "react-bootstrap";
import { Route, Routes } from "react-router-dom";
import Users from "./pages/Users";

function App() {
  return (
    <Container className="my-3">
      <Routes>
        <Route path="/" element={<Users />} />
      </Routes>
    </Container>
  );
}

export default App;
