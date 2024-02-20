import axios from "axios";
import { useEffect, useState } from "react";
import { Badge, Button, Col, Form, Modal, Row, Table } from "react-bootstrap";

function ReadUsers({ reload, setReload }) {
  const [open, setOpen] = useState(false);
  const [users, setUsers] = useState([]);

  const [id, setId] = useState("");
  const [full_name, setFull_name] = useState("");
  const [email, setEmail] = useState("");
  const [celular, setCelular] = useState("");
  const [name_folder, setName_folder] = useState("");

  const handleSubmit = (e) => {
    e.preventDefault();

    const form = {
      full_name: full_name,
      email: email,
      celular: parseInt(celular),
      name_folder: name_folder,
    };

    axios
      .put(import.meta.env.VITE_SERVER_URL_AUD + "/api/users/" + id, form)
      .then((res) => {
        // console.log(res.data);
        alert(res.data.message);

        if ("success" === res.data.status) {
          setOpen(false);
          handleRead();
        }
      });
  };

  const handleSubmitDelete = (e) => {
    e.preventDefault();

    axios
      .delete(import.meta.env.VITE_SERVER_URL_AUD + "/api/users/" + id)
      .then((res) => {
        // console.log(res.data);
        alert(res.data.message);

        if ("success" === res.data.status) {
          setOpen(false);
          handleRead();
        }
      });
  };

  const handleRead = () => {
    axios.get("http://127.0.0.1:8000/api/users").then((res) => {
      // console.log(res.data);
      setUsers(res.data.status ? [] : res.data);
    });
  };

  useEffect(() => {
    handleRead();
  }, []);

  useEffect(() => {
    if (reload) {
      handleRead();
      setReload(false);
    }
  }, [reload]);

  return (
    <>
      <Table responsive hover>
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">FULL NAME</th>
            <th scope="col">EMAIL</th>
            <th scope="col">CELULAR</th>
            <th scope="col">FOLDER</th>
            <th scope="col">CREADO</th>
            <th scope="col">STATUS</th>
          </tr>
        </thead>
        <tbody>
          {users.map((user, index) => (
            <tr
              key={index}
              role="button"
              onClick={() => {
                setOpen(true);
                setId(user.id);
                setFull_name(user.full_name);
                setEmail(user.email);
                setCelular(user.celular);
                setName_folder(user.name_folder);
              }}
            >
              <td>{user.id}</td>
              <td>{user.full_name}</td>
              <td>{user.email}</td>
              <td>{user.celular}</td>
              <td>{user.name_folder}</td>
              <td>{user.date}</td>
              <td>
                {1 === user.status ? (
                  <Badge bg="success">Activo</Badge>
                ) : (
                  <Badge bg="danger">Inactivo</Badge>
                )}
              </td>
            </tr>
          ))}
        </tbody>
      </Table>

      <Modal show={open} onHide={() => setOpen(false)}>
        <Modal.Header closeButton>
          <Modal.Title>Create Users</Modal.Title>
        </Modal.Header>

        <Modal.Body>
          <Row>
            <Col xs={12} sm={6} md={6}>
              <Form.Group className="mb-3">
                <Form.Control
                  type="test"
                  placeholder="Fullname..."
                  required
                  value={full_name}
                  onChange={(e) => setFull_name(e.target.value)}
                />
              </Form.Group>
            </Col>

            <Col xs={12} sm={6} md={6}>
              <Form.Group className="mb-3">
                <Form.Control
                  type="email"
                  placeholder="Email..."
                  required
                  value={email}
                  onChange={(e) => setEmail(e.target.value)}
                />
              </Form.Group>
            </Col>

            <Col xs={12} sm={6} md={6}>
              <Form.Group className="mb-3">
                <Form.Control
                  type="phone"
                  placeholder="Celular..."
                  required
                  value={celular}
                  onChange={(e) => setCelular(e.target.value)}
                />
              </Form.Group>
            </Col>

            <Col xs={12} sm={6} md={6}>
              <Form.Group className="mb-3">
                <Form.Control
                  type="test"
                  placeholder="Name Folder..."
                  required
                  value={name_folder}
                  onChange={(e) => setName_folder(e.target.value)}
                />
              </Form.Group>
            </Col>
          </Row>
        </Modal.Body>

        <Modal.Footer>
          <Button variant="secondary" onClick={() => setOpen(false)}>
            Close
          </Button>

          <Button type="button" variant="danger" onClick={handleSubmitDelete}>
            Delete Changes
          </Button>

          <Button type="button" onClick={handleSubmit}>
            Save Changes
          </Button>
        </Modal.Footer>
      </Modal>
    </>
  );
}

export default ReadUsers;
